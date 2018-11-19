@if(!empty($type) && $type == "radio")
    @php 
        $menu = App\Menu::get_menu($code);
        $options = $menu->options;
    @endphp
    <label for="">{{ $menu->name }}</label>
    <select name="{{ $name }}"  class="form-control">
    @foreach($options as $option)
        <option value="{{ $option->id }}">{{ $option->name }}</option>

    @endforeach
    </select>
@else

@endif