<x-header />

<h1>Панель журналиста</h1>

<form action="{{ route('journalist.store') }}" method="POST">
    @csrf 

    <p>Название статьи: <input type="text" name="title" required></p>

    <p>Категория:
        <select name="category" required>
            <option value="IT">IT</option>
            <option value="Наука">Наука</option>
            <option value="Спорт">Спорт</option>
        </select>
    </p>    

    <p>Текст статьи:</p>
    <textarea name="content" rows="4" cols="30" required></textarea><br><br>
    <button type="submit">Опубликовать</button>
</form>

<x-footer />