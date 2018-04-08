<?php include_once("header.php"); ?>



 <div class="content-wrapper">
    <div class="container-fluid">
      <h3> Password and Security </h3>

                  <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-body">
            	             <div class="table-responsive">
             	<table class="table">
             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th></th>
             				<th>WALLET ID</th>
             				<th></th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td></td>
             				<td>XXX-XXX-XXX-XXX</td>
             				<td></td>

             			</tr>
             		</tbody>

             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th></th>
             				<th>WALLET BALANCE</th>
             				<th></th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td><b>NGN</b> XXX</td>
             				<td></td>
             				<td><b>USD</b> XXX</td>
             			</tr>
             			  <tr>
             				<td><b>EOR</b> XXX</td>
             				<td></td>
             				<td><b>GBP</b> XXX</td>
             			</tr>
             		</tbody>

             	
             	</table>
             </div>
            </div>

             <div class="card-footer text-center" >
             	<button class="btn btn-default" data-toggle="modal" data-target="#fundWallet">Fund Wallet</button>
             	<br><br>
             	<button class="btn btn-default" data-toggle="modal" data-target="#purchaseTokens">Purchase Tokens</button>
             </div>
          </div>
          <!-- /Card Columns-->
        </div>
      </div>



    <!-- Fund Wallet Modal-->
    <div class="modal fade" id="fundWallet" tabindex="-1" role="dialog" aria-labelledby="fundWalletLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="fundWalletLabel">Fund Wallet</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          	
          		  <div class="card-body">
            	             <div class="table-responsive">
             	<table class="table">
             		<tbody>
             			<tr>
             				<td><b>Wallet ID</b></td>
             				<td></td>
             				<td>XXXXXXX</td>
             			</tr>
             			  <tr>
             				<td><b>Wallet Balance</b></td>
             				<td></td>
             				<td>XXXXX</td>
             			</tr>

             			<tr>
             				<td><b>Token Balance</b></td>
             				<td></td>
             				<td>XXXXX</td>
             			</tr>
             		</tbody>

             	
             	</table>
             </div>
            </div>

          </div>
          <div class="modal-footer">
            <a class="btn btn-primary text-white">Convert</a>
          </div>
        </div>
      </div>
    </div>



    <!-- Purchase Tokens Modal-->
    <div class="modal fade" id="purchaseTokens" tabindex="-1" role="dialog" aria-labelledby="purchaseTokensLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="purchaseTokensLabel">Purchase Tokens</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
          	
          		  <div class="card-body">
            	             <div class="table-responsive">
             	<table class="table">
             		<tbody>
             			<tr>
             				<td><button class="btn btn-primary">Mastercard</button></td>
             				<td></td>
             				<td><button class="btn btn-warning">Visa</button></td>
             			</tr>
             			  <tr>
             				<td><button class="btn btn-danger">Verve</button></td>
             				<td></td>
             				<td><button class="btn btn-default">Bank</button></td>
             			</tr>
             		</tbody>

             	
             	</table>
             </div>
            </div>

          </div>
        </div>
      </div>
    </div>


<?php include_once("footer.php"); ?>


<?php include_once("footer.php"); ?>