<div class="form-group">
    <label for="title">Title: </label>
    <input type="text" class="form-control" value="{{ old('title', optional($post ?? null)->title) }}" id="title"
        name="title" />
</div>

<div class="form-group">
    <label for="content">Content: </label>
    <textarea class="form-control" id="content" name="content">{{ old('content', optional($post ?? null)->content) }}</textarea>
</div>
