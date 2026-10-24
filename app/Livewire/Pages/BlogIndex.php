<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

#[Title('Flight Intelligence & Luxury Travel Blog · JustBusinessClass.us')]
class BlogIndex extends Component
{
    use WithPagination;

    public string $search = '';
    public string $category = 'all';

    protected $queryString = [
        'search' => ['except' => ''],
        'category' => ['except' => 'all'],
        'page' => ['except' => 1],
    ];

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingCategory(): void
    {
        $this->resetPage();
    }

    public function setCategory(string $category): void
    {
        $this->category = $category;
        $this->resetPage();
    }

    public function render()
    {
        $query = Post::query()
            ->with(['blogCategory', 'subcategory'])
            ->published();

        if ($this->search !== '') {
            $query->where(function ($q) {
                $q->where('title', 'like', '%' . $this->search . '%')
                  ->orWhere('excerpt', 'like', '%' . $this->search . '%');
            });
        }

        if ($this->category !== 'all') {
            $query->where(function ($q) {
                $q->where('category', $this->category)
                  ->orWhereHas('blogCategory', fn ($sub) => $sub->where('slug', $this->category)->orWhere('name', $this->category))
                  ->orWhereHas('subcategory', fn ($sub) => $sub->where('slug', $this->category)->orWhere('name', $this->category));
            });
        }

        $posts = $query->orderBy('is_featured', 'desc')
            ->orderBy('published_at', 'desc')
            ->paginate(9);

        // Fetch visible top-level categories with their subcategories and published post counts
        $categoriesList = \App\Models\Category::query()
            ->parentsOnly()
            ->visible()
            ->with(['subcategories' => fn ($q) => $q->visible()])
            ->withCount(['posts' => fn ($q) => $q->published()])
            ->orderBy('sort_order')
            ->orderBy('name')
            ->get();

        // Top 4 recent articles for sidebar or marquee
        $recentPosts = Post::query()
            ->published()
            ->orderBy('published_at', 'desc')
            ->limit(4)
            ->get();

        return view('livewire.pages.blog-index', [
            'posts' => $posts,
            'categories' => $categoriesList,
            'recentPosts' => $recentPosts,
        ])->layout('components.layouts.app');
    }
}
