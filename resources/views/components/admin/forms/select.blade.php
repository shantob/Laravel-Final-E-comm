@props(['name', 'label' => '', 'values' => '', 'selectedval' => []])




<div class="mb-3 ">
    @if ($label)
        <label for="{{ $name }}Input">{{ $label }}</label><br>
    @endif
    <select id="{{ $name }}Input" class="form-control" name="{{ $name }}"
        {{ $attributes->merge(['class' => 'form-control']) }}>
        <option value="" disabled selected>--{{ $label }} --</option>


        @foreach ($values as $keys => $value)
            <option value="{{ $value }}" @if ($value == $selectedval) selected @endif>
                {{-- {{ $value->name ? $value->name : $value }} --}}
                {{ $value }}
            </option>
        @endforeach


    </select>
    <br>


    @error($name)
        <div class="form-text text-danger">{{ $message }}</div>
    @enderror
</div>
