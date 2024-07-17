        <label for="{{ $name }}">{{ $label }}</label>
        <select class="form-control" id="{{ $name }}" name="{{ $name }}">
            @foreach ($options as $value => $text)
                <option value="{{ $value }}">{{ $text }}</option>
            @endforeach
        </select>