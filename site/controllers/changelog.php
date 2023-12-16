<?php

return function () {
	return [
		'releases' => page('releases')
			->children()
			->flip()
			->filter(
				fn ($release) => $release->breaking()->isNotEmpty()
			),
	];
};
