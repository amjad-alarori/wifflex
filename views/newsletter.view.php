<div class="card text-white bg-secondary mb-3">
    <div class="card-header">Nieuwsbrief</div>
    <div class="card-body">
        <h4 class="card-title" id="NewsLetterTitle">Meld je aan voor onze nieuwsbrief</h4>
        <p class="card-text text-white">Wil jij altijd als eerste op de hoogte worden gesteld over de ontwikkelingen, nieuwtjes en evenementen op
            IT - gebied ?
            En wil jij eenvoudig jouw kennis bijspijkeren als het gaat om programmeren ?
            Meld je dan vrijblijvend aan voor onze maandelijkse nieuwsbrief.</p>
        <form class="newsLetter" method="post" action="/doSubscribe">
            <i class="fas fa-envelope"></i>
            <input type="text" name="name" placeholder="Voor en Achternaam">
            <input type="email" name="email" placeholder="Emailadres">
            <button type="Aanmelden" name="button"> Aanmelden</button>
        </form>
    </div>
</div>


<style>

    #NewsLetterTitle{

        font-weight: bold;
        text-decoration-line: underline;
        text-decoration-color: beige;
    }
</style>
