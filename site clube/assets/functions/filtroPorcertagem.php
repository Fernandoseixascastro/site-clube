<?php

function filtroPorcentagem() { 
?>
	<div class="input-group-btn" id="searchFilter">
					<button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
					</span> <span class="caret" ><i class="fa fa-filter"></i> Filtrar por Desconto</span></button>
					<div class="dropdown-menu dropdown-menu-left" >
						
						<form action="search-desconto.php" method="get">
							<ul class="filtro_desconto" >
								<li>
									<button name="s" type="submit" value="15%">Até 15%</button>
								</li>
								<li>
									<button name="s" type="submit" value="20%">Até 20%</button>
								</li>
								<li>
									<button name="s" type="submit" value="25%">Até 25%</button>
								</li>
								<li>
									<button name="s" type="submit" value="30%">Até 30%</button>
								</li>
								<li>
									<button name="s" type="submit" value="35%">Até 35%</button>
								</li>
								<li>
									<button name="s" type="submit" value="40%">Até 40%</button>
								</li>
								<li>
									<button name="s" type="submit" value="45%">Até 45%</button>
								</li>
								<li>
									<button name="s" type="submit" value="50%">Até 50%</button>
								</li>
								<li>
									<button name="s" type="submit" value="55%">Até 55%</button>
								</li>
								<li>
									<button name="s" type="submit" value="60%">Até 60%</button>
								</li>
							</ul>
						</form>
					</div>
				</div>
<?php
return ;
}

?>