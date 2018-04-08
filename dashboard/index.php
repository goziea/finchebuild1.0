<?php include_once("header.php"); ?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <h3> Zoren Incorporation </h3>
      <br>
      <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-4 col-sm-6 mb-3 col-xl-push-8">
          <div class="card bg-white  o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <img src="img/listed.png">
              </div>
              <div class="mr-5"><span style="color: ##43425D; opacity: .5;">Projected Listed </span><br><br> <b style="font-size: 1.5em;">30,000</b></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card bg-white o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <img src="img/money.png">
              </div>
               <div class="mr-5"><span style="color: ##43425D; opacity: .5;">Fund Raised </span><br><br> <b style="font-size: 1.5em;">245,000</b></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-3 col-xs-push-8">
          <div class="card bg-white o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <img src="img/investors.png">
              </div>
                <div class="mr-5"><span style="color: ##43425D; opacity: .5;">Number of Investors </span><br><br> <b style="font-size: 1.5em;">200</b></div>
            </div>
            <a class="card-footer" href="#" style="background: #fff; border: none;"></a>
          </div>
        </div>
      </div>

      <!-- FIRST TWO CARFS -->

            <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header" style="background: #fff; border-bottom: none;">Life Projects</div>
            <div class="card-body">
             <div class="table-responsive">
             	<table class="table">
             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th>NAME</th>
             				<th>COUNTRY</th>
             				<th>STATE</th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td>Minna Tech Meetup</td>
             				<td>Nigeria</td>
             				<td>Niger</td>
             			</tr>
             		</tbody>

             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th>PRINCIPAL</th>
             				<th>TENOR</th>
             				<th></th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td>6 million </td>
             				<td>5 months</td>
             			</tr>
             		</tbody>

             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th>PAYMENT DUE</th>
             				<th>STATUS</th>
             				<th>NO. OF INVESTORS</th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td>50,000</td>
             				<td>XXXXXX</td>
             				<td>XXXXXX</td>
             			</tr>
             		</tbody>
             	</table>
             </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
        <div class="col-lg-4">
         <!-- Bar Chart -->
          <div class="card mb-3">
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
          </div>
        </div>
      </div>


      <!-- SECOND CARDS -->

                  <div class="row">
        <div class="col-lg-8">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header" style="background: #fff; border-bottom: none;">Completed Projects</div>
            <div class="card-body">
             <div class="table-responsive">
             	<table class="table">
             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th>NAME</th>
             				<th>COUNTRY</th>
             				<th>STATE</th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td>Minna Tech Meetup</td>
             				<td>Nigeria</td>
             				<td>Niger</td>
             			</tr>
             		</tbody>

             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th>PRINCIPAL</th>
             				<th>TENOR</th>
             				<th>NO. OF INVESTORS</th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td>6 million </td>
             				<td>5 months</td>
             				<td>500</td>
             			</tr>
             		</tbody>

             		<thead style="background: #F5F6FA; border-top: none; border-bottom: none;">
             			<tr>
             				<th>PAYMENT MODE</th>
             				<th>STATUS</th>
             			</tr>
             		</thead>
             		<tbody>
             			<tr>
             				<td>50,000</td>
             				<td>XXXXXX</td>
             			</tr>
             		</tbody>
             	</table>
             </div>
            </div>
          </div>
          <!-- /Card Columns-->
        </div>
        <div class="col-lg-4">
         <!-- Bar Chart -->
          <div class="card mb-3">
            <div class="card-body">
              <canvas id="myPieChart" width="100%" height="100"></canvas>
            </div>
          </div>
        </div>
      </div>

 <?php include_once("footer.php"); ?>