<div class="form-group">
    {!! Form::label('title', 'Title') !!}
    {!! Form::text('title',null,['autofocus' => 'true','class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content') !!}
    {!! Form::textarea('content',null,['class' => 'form-control']) !!}
</div>
@push('scripts')
<script>
    $(function () {
        $('#content').summernote({
            height: 300,
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol']],
                ['height', ['height']]
            ]
        });
    });

</script>
@endpush

