<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PostTest extends TestCase
{
    use RefreshDatabase;
    public function test_creating_post(): void
    {
        //* Arrange
        $post = new Post();
        $post['title'] = 'Test Post';
        $post['content'] = "This is a dummy content";
        $post->save();

        //* Act
        $response = $this->get('/api/posts');

        //* Assert
        $response->assertSeeText('Test Post');
    }

    public function test_creating_valid_post(): void
    {
        $params = [
            'title' => 'Test Post',
            'content' => "This is a dummy content",
        ];

        //* this->post hanya exclusive untuk testing
        $this->post('/api/posts', $params)
            ->assertStatus(302)
            ->assertSessionHas('status');
        
            $this->assertEquals(session('status'), 'Succesfully created!');
    }
}
