<?php ob_start()?>

<!-- "Bonjour à tous, page accueil - ob_start"; -->
<!--  <h1>Page d'accueil</h1> -->
<h3>Présentation</h3>
<p>
    Lorem ipsum dolor sit amet. Sit veritatis laudantium ut aperiam dolores in quas neque id deleniti numquam et dolor ipsum. 33 quam quia sit adipisci alias sit excepturi autem aut fuga ipsum id fugiat quia est consectetur quisquam.
    Eos voluptatum quibusdam est excepturi rerum aut laudantium delectus nam ullam veritatis. Est repellendus corporis qui reiciendis dolor non nisi iste sed libero perferendis ea incidunt culpa est nisi veritatis a consequuntur velit!
</p>
<div class="conteneur-ligne">
    <div class="element">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/teU8tAQo3CE" 
            title="YouTube video player" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
    <div class="element">
        <p>
            Lorem ipsum dolor sit amet. Sit veritatis laudantium ut aperiam dolores in quas neque id deleniti numquam et dolor ipsum. 33 quam quia sit adipisci alias sit excepturi autem aut fuga ipsum id fugiat quia est consectetur quisquam.
            Eos voluptatum quibusdam est excepturi rerum aut laudantium delectus nam ullam veritatis. Est repellendus corporis qui reiciendis dolor non nisi iste sed libero perferendis ea incidunt culpa est nisi veritatis a consequuntur velit!
        </p>
    </div>
</div>
<h3>Les ordinateurs, une révolutions !</h3>
<div class="conteneur-ligne">
    <div class="element">
        <p>
            Lorem ipsum dolor sit amet. Sit veritatis laudantium ut aperiam dolores in quas neque id deleniti numquam et dolor ipsum. 33 quam quia sit adipisci alias sit excepturi autem aut fuga ipsum id fugiat quia est consectetur quisquam.
            Eos voluptatum quibusdam est excepturi rerum aut laudantium delectus nam ullam veritatis. Est repellendus corporis qui reiciendis dolor non nisi iste sed libero perferendis ea incidunt culpa est nisi veritatis a consequuntur velit!
        </p>
    </div>
    <div class="element">
        <iframe width="560" height="315" 
            src="https://www.youtube.com/embed/JqxhbF6iFco" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
            allowfullscreen>
        </iframe>
    </div>
</div>
<h3>Organisation interne</h3>
<p>
    Lorem ipsum dolor sit amet. Quo galisum molestiae harum atque sed fugiat voluptas. Ut tempora quam est consectetur voluptatem et quia necessitatibus non doloribus obcaecati ea explicabo quidem et sint facere id voluptas sunt. Eos rerum earum eum consequatur beatae nam doloremque doloribus est aperiam accusantium. 
</p>
<?php
    $content=ob_get_clean();
    $titre = "Page d'accueil";
    require "template.php";
?>