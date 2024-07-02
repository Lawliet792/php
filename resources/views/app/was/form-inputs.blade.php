@php $editing = isset($wa) @endphp

<div class="row">
    <x-inputs.group class="col-sm-12">
        <x-inputs.text
            name="wa"
            label="Wa"
            :value="old('wa', ($editing ? $wa->wa : ''))"
            placeholder="Wa | Gunakan Format 62, Misal 6287xxxxx"
            required
        ></x-inputs.text>
    </x-inputs.group>
</div>
