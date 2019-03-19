<div id="carrousel">
    <h2 id="carrouselTitle">Voitures du jour</h2>
    <div class="fling-minislide">
    <?php  
        $car_list = get_car_list();
        $car_list_size = count($car_list);
    ?>
        <img src="images/car_pic.php?id=<?php echo $car_list_size-1 ?>&new_size=750" alt="Slide 1" />
        <img src="images/car_pic.php?id=<?php echo $car_list_size-2 ?>&new_size=750" alt="Slide 2" />
        <img src="images/car_pic.php?id=<?php echo $car_list_size-3 ?>&new_size=750" alt="Slide 3" />
        <img src="images/car_pic.php?id=<?php echo $car_list_size-4 ?>&new_size=750" alt="Slide 4" />
    </div>
</div>