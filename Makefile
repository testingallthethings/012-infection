CHANGES_SRC= $(shell git status -s | awk '{print $$2}' | grep -e '.php$$' | grep -vi 'Test' | awk '{printf "%s,", $$1}' | awk '{print substr($$1, 1, length($$1)-1)}')

mutate_integer:
	./vendor/bin/infection --filter=src/Integer.php

mutate_string:
	./vendor/bin/infection --filter=src/MyString.php

mutate_modified:
	./vendor/bin/infection --filter=$(CHANGES_SRC)
