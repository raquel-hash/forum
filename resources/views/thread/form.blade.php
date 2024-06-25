<div>
    <select name="category_id" class="bg-slate-800 border-0 rounded-md w-full p-3 text-white/60 text-xs capitalize mb-4">
        <option value="">Seleccionar Categoria</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" @if ($thread->category_id == $category->id) selected @endif> {{ $category->name }}
            </option>
        @endforeach
    </select>
    <input type="text" name="title" class="bg-slate-800 border-0 rounded-md w-full p-3 text-white/60 text-xs mb-4"
        placeholder="Título" value="{{ $thread->title }}" />

    <textarea name="body" rows="10" placeholder="Descripcion del problema"
        class="bg-slate-800 border-0 rounded-md w-full p-3 text-white/60 text-xs mb-4">{{ $thread->body }}</textarea>
</div>
