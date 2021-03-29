<?php get_header(); ?>
<section class="hero">
    <div class="hero__wrapper hero__wrapper--mans-best">
        <div class="hero__container">
            <h2 class="hero__heading">Man's Best</h2>
            <p class="hero__info">Zapach prawdziwego mężczyzny</p>
            <a href="produkt/mans-best-edt/" class="hero__button">Odkrywaj</a>
        </div>
    </div>
</section>

<section class="hero">
    <div class="hero__wrapper hero__wrapper--womans-best">
        <div class="hero__container">
            <h2 class="hero__heading">Woman's Best</h2>
            <p class="hero__info">Zapach prawdziwej damy</p>
            <a href="produkt/womans-best/" class="hero__button">Odkrywaj</a>
        </div>
    </div>
</section>

<section class="front-categories">
    <h2 class="front-categories__heading">Nasze kategorie</h2>
    <div class="front-categories__wrapper">
        <div class="front-categories__container front-categories__container--men">
            <a href="/dla-niego" class="front-categories__button">Wszystko dla niego</a>
        </div>
        <div class="front-categories__container front-categories__container--women">
            <a href="/dla-niej" class="front-categories__button">Wszystko dla niej</a>
        </div>
    </div>
</section>

<section class="front-about">
    <h1 class="front-about__heading">bruno banani
        <span class="front-about__heading-info">nie dla każdego
        </span>
    </h1>
    <p class="front-about__paragraph">
        Wyzwól się ze stereotypów i pozwól swojej nieskrępowanej części osobowości sięgnąć po to, co wyjątkowe. Odkryj
        świat zapachów Bruno Banani, które, jak głosi motto marki, nie są dla każdego. Nowatorskie kompozycje zapachowe
        i niezwykły design flakonów zawsze jednak zwracają na siebie uwagę. Niemiecka marka Bruno Banani zaczynała na
        początku lat 90-tych od produkcji bielizny. Słynęła z oryginalności, doskonałej jakości i odważnych projektów, a
        także niekonwencjonalnych metod promocji.
    </p>
    <p class="front-about__paragraph">
        W 2000 roku nasza marka weszła do świata perfum i szybko znalazła się w centrum
        uwagi wszystkich, których interesuje styl i niebanalność. Każde perfumy Bruno Banani są inne i każde z nich
        emanują nieodgadnioną tajemnicą. Pewny siebie, spontaniczny czy nieodparcie pociągający? Z męską wodą toaletową
        Bruno Banani Man to od Ciebie zależy, kim będziesz. Z kolei kobiecy zapach Bruno Banani Pure Woman to esencja
        kobiecości w czystej postaci. Łączy w sobie subtelną delikatność oraz kuszącą obietnicę, sprawiając, że
        zostaniesz zauważona.
    </p>
</section>

<section class="shop-section shop-section--bestsellers">
    <div class="shop-section__wrapper">
        <div class="shop-section__container">
            <h2 class="shop-section__heading">Popularne dla niej</h2>
            <div class="items">
                <?php echo do_shortcode('[best_selling_products tag="women" limit="4"]'); ?>
            </div>
        </div>
        <div class="shop-section__container">
            <h2 class="shop-section__heading">Popularne dla niego</h2>
            <div class="items">
                <?php echo do_shortcode('[best_selling_products tag="men" limit="4"]'); ?>
            </div>
        </div>
    </div>
</section>

<section class="hero">
    <div class="hero__wrapper hero__wrapper--absolute-man">
        <div class="hero__container">
            <h2 class="hero__heading">Absolute Man</h2>
            <p class="hero__info">Wyzwól w sobie bestię</p>
            <a href="produkt/mans-best-edt/" class="hero__button">Odkrywaj</a>
        </div>
    </div>
</section>

<section class="front-categories">
    <h2 class="front-categories__heading">Zapachy</h2>
    <div class="front-categories__wrapper">
        <div class="front-categories__container front-categories__container--fragrance-men">

            <a href="/dla-niego" class="front-categories__button">Zapachy dla niego</a>
        </div>
        <div class="front-categories__container front-categories__container--fragrance-women">
            <a href="/dla-niej" class="front-categories__button">Zapachy dla niej</a>
        </div>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">Nowości</h2>
    <div class="items">
        <?php echo do_shortcode('[recent_products limit="8" orderbyid="id" order="DESC"]'); ?>
    </div>
</section>


<!-- <section class="standard-promo">
    <a href="http://woocommerce-shop.com/kobiecy-swiat/" class="promo-card promo-card--gray promo-card--women">
        <h2 class="promo-card__heading">Shop Women</h2>
        <p class="promo-card__body">Women's new arrivals. It's time to explore your options.</p>
    </a>
    <a href="http://woocommerce-shop.com/meski-swiat/" class="promo-card promo-card--gray promo-card--men">
        <h2 class="promo-card__heading">Shop Men</h2>
        <p class="promo-card__body">Mens's new arrivals. It's time to explore your options.</p>
    </a>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">Women's Best Sellers</h2>
    <p class="shop-section__body">Our women's bestsellers. They are smooth and soft<br /> with adjustable elastic loop.
    </p>
    <div class="items">
        <?php echo do_shortcode('[recent_products tag="women-front-page" limit="4"]'); ?>
    </div>
</section>

<section class="shop-section">
    <h2 class="shop-section__heading">New Arrivals</h2>
    <p class="shop-section__body">New arrivals. Updated every<br /> day. It's time to explore.</p>
    <div class="items">
        <?php echo do_shortcode('[products limit="4" orderbyid="id" order="DESC"]'); ?>
    </div>
</section> -->





<?php get_footer(); ?>