<div>
    <select name="category_id" class="bg-slate-800 border-0 rounded-md w-full p-3 text-white/60 text-xs capitalize mb-4">
        <option value="">Seleccionar Categoria</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if (old('category_id', $thread->category_id) == $category->id) selected @endif> {{ $category->name }}
            </option>
        @endforeach
    </select>
    <input type="text" name="title" class="bg-slate-800 border-0 rounded-md w-full p-3 text-white/60 text-xs mb-4"
        placeholder="Título" value="{{ old('title', $thread->title) }}" />

    <textarea name="body" rows="10" placeholder="Descripcion del problema"
        class="bg-slate-800 border-0 rounded-md w-full p-3 text-white/60 text-xs mb-4">{{ old('body', $thread->body) }}</textarea>
</div>
