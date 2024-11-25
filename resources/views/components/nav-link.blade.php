<div>
    <a {{$attributes}} class="{{ $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block px-3 py-2 font-medium text-white rounded-md text-base" aria-current="page">{{$slot}}</a>
</div>