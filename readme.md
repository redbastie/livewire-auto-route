# Livewire Auto Route

Automatic routes for your Livewire components.

## Installation

Install via composer:

    composer require redbastie/livewire-auto-route

## Usage

Specify public `$route*` properties in your full page Livewire component:

    class Vehicle extends Component
    {
        public $routeUri = '/vehicle/{name}';
        public $routeDomain = null;
        public $routeMiddleware = ['guest'];
        public $routeName = 'vehicle';
        public $routeWhere = ['name' => '[A-Za-z]+'];
    
        public function render()
        {
            return view('livewire.vehicle');
        }
    }

A minimum of `$routeUri` is required.
