<?php

namespace App\Livewire\Pages;

use App\Models\Post;
use Livewire\Component;

class BlogDetail extends Component
{
    public Post $post;

    public function mount(string $slug): void
    {
        $this->post = Post::where('slug', $slug)
            ->published()
            ->firstOrFail();
    }

    public function render()
    {
        // 3 Recent / Related posts
        $recentPosts = Post::query()
            ->published()
            ->where('id', '!=', $this->post->id)
            ->orderBy('published_at', 'desc')
            ->limit(3)
            ->get();

        return view('livewire.pages.blog-detail', [
            'post' => $this->post,
            'recentPosts' => $recentPosts,
        ])
        ->layout('components.layouts.app', [
            'title' => $this->post->meta_title ?: "{$this->post->title} · JustBusinessClass.us Luxury Travel Blog",
            'description' => $this->post->meta_description ?: ($this->post->excerpt ?? 'Expert aviation intelligence, flight reviews, and insider booking secrets for business and first class travelers.'),
            'canonical' => $this->post->canonical_url,
            'robots' => $this->post->robots,
            'ogTitle' => $this->post->og_title ?: $this->post->title,
            'ogDescription' => $this->post->og_description ?: $this->post->excerpt,
            'ogImage' => $this->post->og_image ? (str_starts_with($this->post->og_image, 'http') ? $this->post->og_image : asset('storage/' . $this->post->og_image)) : $this->post->featured_image_url,
            'schemaJson' => $this->post->schema_json,
        ]);
    }
}
