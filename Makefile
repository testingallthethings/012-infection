mutate_integer:
	./vendor/bin/infection --filter=src/Integer.php

mutate_string:
	./vendor/bin/infection --filter=src/MyString.php
