@extends('layouts.app')

@section('title')
    Documantation - {{ config('app.page_title') }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('docs._sidebar')
            </div>
            <div class="col-md-9">

                <h1>Mage2 E commerce Module Views</h1>

                <h3># Module View Files</h3>

                <pre class="language-php">namespace Mage2\HelloWorld\Controllers;

use Illuminate\Http\Request;
use Mage2\Framework\System\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->get('name','World');
        return view('mage2-hello-world::index.index')
                    ->with('name', $name);
    }

}</pre>
                <p>&nbsp;</p>
                <h4>#To check if view exists</h4>
                <pre>use Illuminate\Support\Facades\View;

if (View::exists('mage2-hello-world::index.index')) {
    // return view here
}</pre>
                <p>&nbsp;</p>
                <h4>#Pass an Argument to view</h4>
                <pre>
return view('mage2-hello-world')->with('name', $name)

//Another way
return view('mage2-hello-world',['name' => $name]);</pre>

                <p>&nbsp;</p>

                <h4>#View Composer</h4>
                <p>
                    Mage2 View Composer is callback or class methods that is been called before the view about to rendered.
                    Let say you want to pass an admin navigation to Admin <span class="label label-warning">nav.blade.php</span> We can use View composer.

                    Step 1: Open your <span class="label label-default"> Module.php</span>
                </p>
                <pre class="language-php">use Illuminate\Support\Facades\View;
                    /**
 * Register bindings in the container.
 *
 * @return void
 */
public function register()
{
      View::composer(
            'mage2-hello-world', 'Mage2\HelloWorld\ViewComposers\HelloWorldFieldComposer'
        );

    // Use Same composer for mutliple views

    View::composer(
            ['mage2-hello-world::index.create','mage2-hello-world::index.edit'],
                'Mage2\HelloWorld\ViewComposers\HelloWorldFieldComposer'
        );

}</pre>

                <p>Create an file inside your module <span class="label label-default"> ViewComposers</span> folder called <span  class="label label-default">HelloWorldFieldComposer.php</span></p>
                <pre class="language-php">namespace Mage2\HelloWorld\ViewComposers;

use Illuminate\View\View;

class HelloWorldFieldComposer
{

    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $name = "Jack Sparrow";
        $view->with('name', $name);
    }

}
</pre>



            </div>
        </div>
    </div>
    </div>
@endsection
