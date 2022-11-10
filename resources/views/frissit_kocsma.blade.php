<form action="frissit-kocsma" method="post">
    @csrf
    <p>
        <label for="">Név:</label>
        <input type="text" name="nev" value="{{$kocsma->nev}}" >
    </p>
    <p>
        <label for="">Típus:</label>
        <input type="text" name="tipus" value="{{$kocsma->type->nev}}">
    </p>
    <p>
        <label for="">Ár:</label>
        <input type="text" name="ar" value="{{$kocsma->ar}}">
    </p>
    <p>
    <button type="submit">Frissítés</button>
    </p>
</form>
