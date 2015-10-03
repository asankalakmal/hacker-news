
<?php require 'application/views/layouts/header.php'; ?>

<div ng-controller="HackerPaginationCtrl">
<!--panel-->
<div class="panel panel-primary">
    <!-- Default panel contents -->
    <div class="panel-heading">Hacker News - Github</div>
    	<div class="panel-body" ng-init="pageChanged()">

				<table class="table" ng-show="showTable === true">
					<thead>
					<tr>
						<th>Date of creation</th>
						<th>Title</th>
						<th>Author Name</th>
						<th>Author Points</th>
						<th>News URL</th>
					</tr>
					</thead>
					<tbody>
					<tr ng-repeat="news in allNews">
						<td class="col-md-1">{{news.created_at | date:'dd/MM/yyyy'}}</td>
						<td class="col-md-4">{{news.title}}</td>
						<td class="col-md-1">{{news.author}}</td>
						<td class="col-md-1">{{news.points}}</td>
						<td class="col-md-5"><a href="{{news.url}}">{{news.url}}</a></td>
					</tr>
					</tbody>
				</table>
				<div class="alert alert-danger" role="alert" ng-show="showError === true">
					<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
					<span class="sr-only">Error:</span>
			  		Unknown Error!
				</div>
		</div>
	</div>
<!--end of panel-->
	<pagination ng-show="showTable === true" total-items="totalItems" ng-model="currentPage" ng-change="pageChanged()" items-per-page="20" max-size="10"></pagination>
</div>

<?php require 'application/views/layouts/footer.php'; ?>