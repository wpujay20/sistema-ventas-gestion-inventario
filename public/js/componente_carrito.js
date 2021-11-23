var menu = new cbpHorizontalSlideOutMenu( document.getElementById( 'cbp-hsmenu-wrapper' ) );
				$(document).ready(function () {
				$('#tablaCRUD').DataTable(
					{
						"lengthMenu": [[10, 25, 50], [10, 25, 50]],
						"language": {
							"url": "https://cdn.datatables.net/plug-ins/1.10.20/i18n/Spanish.json"
							}
					}
				);
			});