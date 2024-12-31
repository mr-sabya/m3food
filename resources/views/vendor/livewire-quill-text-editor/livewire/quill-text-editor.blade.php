<div wire:ignore style="width: 100%;">
    <div id="{{ $quillId }}" style="height: 300px; width: 100%;"></div>
</div>

@script
<script>
    const quill = new Quill('#' + @js($quillId), {
        theme: @js($theme)
    });
    
    quill.root.innerHTML = $wire.get('value');
    
    quill.on('text-change', function () {
        let value = quill.root.innerHTML;
        @this.set('value', value);
    });
</script>
@endscript
