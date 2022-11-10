<a href="/kocsmaadat"><button>Adatok</button></a>
<a href="/frissit-kocsma"><button>Frissítetta adatok</button></a>


@if(session()->has("success"))
    <h3>{{ session("success") }}</h3>
@endif

<form action="veglegesit-ital" method="post">
    @csrf
    <p>
        <label for="">Név:</label>
        <input type="text" name="nev" placeholder="név">
    </p>
    <p>
        <label for="">Ár:</label>
        <input type="text" name="ar" placeholder="ár">
    </p>
    <p>
        <label for="">Típus:</label>
        <input type="text" name="type" placeholder="típus">
    </p>

    <p>
    <button type="submit">Véglegesít</button>
    </p>



</form>
