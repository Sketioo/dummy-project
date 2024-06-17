<div class="form-group mb-3">
    <label for="title" class="form-label">Title: </label>
    <input type="text" class="form-control" value="{{ old('title', optional($post ?? null)->title) }}" id="title"
        name="title" />
</div>

<div class="form-group mb-3">
    <label for="content" class="form-label">Content: </label>
    <textarea class="form-control" id="content" name="content" rows="5">{{ old('content', optional($post ?? null)->content) }}</textarea>
</div>
