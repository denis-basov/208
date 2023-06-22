<footer>
	<h3><?= $title ?? 'Пуфф' ?></h3>
	<nav>
        <?php
            foreach ($menu as $link => $desc){
                echo "<a href='$link'>$desc</a>";
            }
        ?>
	</nav>
</footer>

</body>
</html>
