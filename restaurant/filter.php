<?php include '../view/header.php';
if (!isset($_SESSION["username"])) {
	$user = '';
	include('../errors/login_error.php');
} else { 
	$user = $_SESSION["username"];?>
	
    <div class="col-md-3">   
		<div class="list-group">
			<h3>Price</h3>
			<input type="hidden" id="hidden_minimum_price" value="1" />
			<input type="hidden" id="hidden_maximum_price" value="4" />
			<p id="price_show">$ - $$$$</p>
			<div id="price_range"></div>
		</div>
		<div class="list-group">
			<h3>Rating</h3>
			<input type="hidden" id="hidden_minimum_rating" value="1" />
			<input type="hidden" id="hidden_maximum_rating" value="5" />
			<p id="rating_show">1 - 5</p>
			<div id="rating_range"></div>
		</div>
		<div class="list-group">
			<h3>Categories</h3>
			<div style="height: 400px; overflow-y: auto; overflow-x: hidden;">
				<?php $db = Database::getDB();
				$query = "SELECT cat1 FROM restaurants WHERE cat1 IS NOT NULL UNION 
					SELECT cat2 FROM restaurants WHERE cat2 IS NOT NULL UNION SELECT 
					cat3 FROM restaurants WHERE cat3 IS NOT NULL ORDER BY cat1 ASC";
				$statement = $db->prepare($query);
				$statement->execute();
				$result = $statement->fetchAll();
				foreach($result as $row) { ?>
					<div class="list-group-item checkbox">
						<label>
							<input type="checkbox" class="common_selector category" 
								value="<?php echo $row['cat1']; ?>" />
							<?php echo $row['cat1']; ?>
						</label>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
	<div class="col-md-9">
		<main class="card-wrap">
			<div class="row filter_data"></div>
			<button class="card-btn" onclick='reloadFunc(this.attributes["id"].value)' id="accept">YES</button>
			<button class="card-btn" onclick="reloadFunc(this.id)" id="decline">NO</button>
		</main>
		<br>
		<input type="hidden" id="action" value="" />
		<input type="hidden" id="rest" value="" />
	</div>
	<style>
		#loading
		{
		 text-align:center; 
		 background: url('/PlatePals/loader.gif') no-repeat center; 
		 height: 150px;
		}
	</style>
	
	<script type="text/javascript">
		$(document).ready(function(){

			filter_data();

			function filter_data()
			{
				$('.filter_data').html('<div id="loading" style="" ></div>');
				var func = 'restaurant_view';
				var minimum_price = $('#hidden_minimum_price').val();
				var maximum_price = $('#hidden_maximum_price').val();
				var minimum_rating = $('#hidden_minimum_rating').val();
				var maximum_rating = $('#hidden_maximum_rating').val();
				var category = get_filter('category');
				var action = $('#action').val();
				var restaurant_id = $('#rest').val();
				$.ajax({
					url: "restaurant_view.php",
					type: "POST",
					data: { func: func, minimum_price: minimum_price, maximum_price: maximum_price,
						minimum_rating: minimum_rating, maximum_rating: maximum_rating, 
						category: category, action: action, restaurant_id: restaurant_id},
					success: function (data) {
						$('.filter_data').html(data);
					}
				});
			}

			function get_filter(class_name)
			{
				var filter = [];
				$('.'+class_name+':checked').each(function(){
					filter.push($(this).val());
				});
				return filter;
			}

			$('.common_selector').click(function(){
				filter_data();
			});

			$('#price_range').slider({
				range:true,
				min:1,
				max:4,
				values:[1, 4],
				step:1,
				stop:function(event, ui)
				{
					$('#price_show').html("$".repeat(ui.values[0]) + ' - ' + "$".repeat(ui.values[1]));
					$('#hidden_minimum_price').val(ui.values[0]);
					$('#hidden_maximum_price').val(ui.values[1]);
					filter_data();
				}
			});
			
			$('#rating_range').slider({
				range:true,
				min:1,
				max:5,
				values:[1, 5],
				step:0.5,
				stop:function(event, ui)
				{
					$('#rating_show').html(ui.values[0] + ' - ' + ui.values[1]);
					$('#hidden_minimum_rating').val(ui.values[0]);
					$('#hidden_maximum_rating').val(ui.values[1]);
					filter_data();
				}
			});
					
			document.getElementById("accept").addEventListener("click", function() {
				let a = $('#hidden_restaurant_id').val();
				reloadFunc("accept", a);
			});					
			document.getElementById("decline").addEventListener("click", function() {
				let d = $('#hidden_restaurant_id').val();
				reloadFunc("decline", d);
			})
			
			function reloadFunc(id, r) {
				let hide1 = document.querySelector('#action');
				let hide2 = document.querySelector('#rest');
				hide1.setAttribute('value', id);
				hide2.setAttribute('value', r);
				filter_data();
			}			

		});
	</script>
<?php } 
include '../view/footer.php'; ?>