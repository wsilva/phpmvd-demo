<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use \Cache;
use \Queue;
use App\Commands\Curtir;

use Illuminate\Http\Request;

class DemoController extends Controller
{

	public function demo()
	{
		$curtidas = Cache::get('curtidas', 0);
		return view('demo.index')
			->with('curtidas', $curtidas)
			->with('container', gethostname())
			->with('serverip', $_SERVER['SERVER_ADDR']);
	}

	public function curtir()
	{
		// Queue::pushOn('curtida', 'nova curtida');
		Queue::pushOn('curtida', new Curtir());
		// Cache::increment('curtidas');
		return redirect('demo')->with('message', 'Curtida Ok!');
	}

}
