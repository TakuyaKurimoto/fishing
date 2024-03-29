<?php
namespace Tests\Http\Controllers;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use App\Models\User;
class ExampleTest extends TestCase
{
    use DatabaseMigrations;
    use RefreshDatabase;
    /** @test */
    public function 簡単な画面のテスト()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }
    /** @test */
    public function 簡単なデータベース接続のテスト()
    {
        // テスト用ユーザーの生成
        User::create([
            'name' => 'testTaro',
            'email' => 'example777@mail.com',
            'password' => "testPass"
        ]);
        // 作成したユーザーがdbにあるかチェック
        $this->assertDatabaseHas('users', [
            'name' => 'testTaro',
            'email' => 'example777@mail.com',
            'password' => "testPass"      
        ]);
    }
}