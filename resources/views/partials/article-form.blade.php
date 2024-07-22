{{-- Champ pour le titre de l'article --}}
<div>
    <label for="title">Titre de l'article</label><br>
    <!-- <input type="text" id="title" name="title" value="{{ old('title', isset($article) ? $article->title : '') }}" required> -->
    <input type="text" name="title" value="{{ old('title', isset($article->title) ? $article->title : null) }}">
</div>

{{-- Champ pour le contenu de l'article --}}
<div>
    <label for="content">Contenu de l'article</label><br>
    <!-- <textarea id="content" name="body" rows="10" required>{{ old('content', isset($article) ? $article->content : '') }}</textarea> -->

    <textarea name="body" id="" cols="30"
        rows="10">{{ old('body', isset($article->body) ? $article->body : null) }}</textarea>
</div>

{{-- Champ pour l'image associée --}}
<div>
    <!-- <label for="image">Image associée (optionnel)</label> -->
    <!-- <input type="file" id="image" name="image" > -->
    <input type="file" name="image">
    <button type="submit">Enregistrer</button>
    <button type="submit">Créer l'article</button>
</div> 