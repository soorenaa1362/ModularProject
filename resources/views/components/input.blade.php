<div class="w-100 mlg-15">
    {{-- <x-validation-error field="{{ $name }}" /> <br> --}}
    <input type="{{ $type }}" name="{{ $name }}" placeholder="{{ $placeholder }}" {{ $attributes->merge(['class' => 'text w-100']) }}>
    <x-validation-error field="{{ $name }}" />
</div>