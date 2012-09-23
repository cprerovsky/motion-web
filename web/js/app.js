jQuery(document).ready(function() {
	var PATH = '/motion/',
		$t = $('#toggle'),
		active = false;
	
	// update status display
	function status() {
		$.ajax({
			url: PATH + 'do.php?cmd=status',
			cache: false,
			success: function(data) {
				if (data.indexOf('ACTIVE') !== -1) {
					$t
						.html('active')
						.addClass('btn-success')
						.removeAttr('disabled');
						active = true;
				} else if (!data || data.length === 0) {
					$t
						.html('offline')
						.addClass('btn-danger')
						.removeAttr('disabled');
						active = false;
				} else {
					$t
						.html('paused')
						.addClass('btn-warning')
						.removeAttr('disabled');
						active = false;
				}
			}
		});
	}

	// toggle execution state
	function toggle() {
		var cmd = 'start';

		if (active) {
				cmd = 'pause';
		}

		// update button state
		$t
			.removeClass('btn-success')
			.removeClass('btn-warning')
			.attr('disabled', 'disabled');
		
		$.ajax({
			url: PATH + 'do.php?cmd=' + cmd,
			cache: false,
			success: function (data) {
				status();
			}
		});
	}

	status();
	$t.click(toggle);

	// camera section
	var $cam = $('#cam'), // camera image
		$btnSnapshot = $('#btn-snapshot'),
		$btnLive = $('#btn-live');

	$btnSnapshot.click(function () {
			$btnLive.removeClass('btn-primary');
			$btnSnapshot.addClass('btn-primary');
			$cam.attr('src', 'frame.php?' + (new Date()).getTime());
	});

	$btnLive.click(function () {
			$btnSnapshot.removeClass('btn-primary');
			$btnLive.addClass('btn-primary');
			$cam.attr('src', 'stream.php?' + (new Date()).getTime());
	});
});
