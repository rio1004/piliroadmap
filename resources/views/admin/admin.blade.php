@extends('layout.admin.admin-layout')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Location Tags Overview</h3>

						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fas fa-tree"></i></span>
										<p>
											<span class="number">{{$countTrees}}</span>
											<span class="title">Trees</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fas fa-users-cog"></i></span>
										<p>
											<span class="number">{{$countProcessors}}</span>
											<span class="title">Processors</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fas fa-store"></i></span>
										<p>
											<span class="number">{{$countRetailers}}</span>
											<span class="title">Retailers</span>
										</p>
									</div>
								</div>
								<div class="col-md-3">
									<div class="metric">
										<span class="icon"><i class="fas fa-users"></i></span>
										<p>
											<span class="number">{{$countFarmers}}</span>
											<span class="title">Farmers</span>
										</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div id="map" class="map" style="height: 500px; position: relative;"></div>
								</div>
							</div>
						</div>
					</div>
					<!-- END OVERVIEW -->
					<div class="row">
						<div class="col-md-12">
							<!-- RECENT PURCHASES -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Recent Published Articles</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body no-padding">
									<table class="table table-striped">
										<thead>

                                                <tr>
                                                    <th>Department</th>
                                                    <th>Author</th>
                                                    <th>Title</th>
                                                    <th>Excerpt</th>
                                                    <th>Category</th>
                                                    <th>Action</th>
                                                </tr>
										</thead>
										<tbody>
                                            @foreach($articles as $article)
                                                <tr>
                                                    <td>{{$article->user->name}}</td>
                                                    <td>{{$article->author}}</td>
                                                    <td>{{$article->title}}</td>
                                                    <td>{{\Illuminate\Support\Str::limit($article->excerpt, 20)}} </td>
                                                    <td>{{$article->article_category->category_name}}</td>
                                                    <td><a href="{{route('articles.show', $article->id)}}"><span class="label label-success">View</span></a></td>
                                                </tr>
                                            @endforeach
                                        </tbody>
									</table>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
										<div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Records</a></div>
									</div>
								</div>
							</div>
							<!-- END RECENT PURCHASES -->
						</div>
					</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recent Added Image in Gallery</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body no-padding">
                                    <table class="table table-striped">
                                        <thead>

                                        <tr>
                                            <th>Department</th>
                                            <th>Image Name</th>
                                            <th>Image Photo</th>
                                            <th>Category</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($galleries as $gallery)
                                            <tr>
                                                <td>{{$gallery->user->name}}</td>
                                                <td>{{$gallery->image_name}}</td>
                                                <td><img src="/storage/gallery_images/{{$gallery->image_file}}" alt="" width="50"></td>
                                                <td><a href="{{route('articles.show', $article->id)}}"><span class="label label-success">View</span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                        <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Records</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recent Added Image in Gallery</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body no-padding">
                                    <table class="table table-striped">
                                        <thead>

                                        <tr>
                                            <th>Department</th>
                                            <th>Image Name</th>
                                            <th>Image Photo</th>
                                            <th>Category</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($galleries as $gallery)
                                            <tr>
                                                <td>{{$gallery->user->name}}</td>
                                                <td>{{$gallery->image_name}}</td>
                                                <td><img src="/storage/gallery_images/{{$gallery->image_file}}" alt="" width="50"></td>
                                                <td><a href="{{route('articles.show', $article->id)}}"><span class="label label-success">View</span></a></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                        <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Records</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- RECENT PURCHASES -->
                            <div class="panel">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recent Published Articles</h3>
                                    <div class="right">
                                        <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                        <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                    </div>
                                </div>
                                <div class="panel-body no-padding">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Department</th>
                                                <th>Barangay</th>
                                                <th>Municipality</th>
                                                <th>Farmers</th>
                                                <th>Retailers</th>
                                                <th>Processors</th>
                                                <th>Trees</th>
                                                <th>Latitude</th>
                                                <th>Longitude</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($locationTags as $locationTag)
                                            <tr>
                                                <td>{{$locationTag->user->name}}</td>
                                                <td>{{$locationTag->brgy}}</td>
                                                <td>{{$locationTag->municipality}}</td>
                                                <td>{{$locationTag->farmers}}</td>
                                                <td>{{$locationTag->retailers}}</td>
                                                <td>{{$locationTag->processors}}</td>
                                                <td>{{$locationTag->trees}}</td>
                                                <td>{{$locationTag->latitude}}</td>
                                                <td>{{$locationTag->longitude}}</td>
                                                <td><span class="label label-success">View</span></td>
                                            </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                        <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Records</a></div>
                                    </div>
                                </div>
                            </div>
                            <!-- END RECENT PURCHASES -->
                        </div>
                    </div>
					<div class="row">
						<div class="col-md-7">
							<!-- TODO LIST -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">To-Do List</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled todo-list">
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<span class="title">Restart Server</span>
												<span class="short-description">Dynamically integrate client-centric technologies without cooperative resources.</span>
												<span class="date">Oct 9, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<span class="title">Retest Upload Scenario</span>
												<span class="short-description">Compellingly implement clicks-and-mortar relationships without highly efficient metrics.</span>
												<span class="date">Oct 23, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
										<li>
											<label class="control-inline fancy-checkbox">
												<input type="checkbox"><span></span>
											</label>
											<p>
												<strong>Functional Spec Meeting</strong>
												<span class="short-description">Monotonectally formulate client-focused core competencies after parallel web-readiness.</span>
												<span class="date">Oct 11, 2016</span>
											</p>
											<div class="controls">
												<a href="#"><i class="icon-software icon-software-pencil"></i></a> <a href="#"><i class="icon-arrows icon-arrows-circle-remove"></i></a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END TODO LIST -->
						</div>
						<div class="col-md-5">
							<!-- TIMELINE -->
							<div class="panel panel-scrolling">
								<div class="panel-heading">
									<h3 class="panel-title">Recent User Activity</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled activity-list">
										<li>
											<img src="assets/img/user1.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Michael</a> has achieved 80% of his completed tasks <span class="timestamp">20 minutes ago</span></p>
										</li>
										<li>
											<img src="assets/img/user2.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Daniel</a> has been added as a team member to project <a href="#">System Update</a> <span class="timestamp">Yesterday</span></p>
										</li>
										<li>
											<img src="assets/img/user3.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Martha</a> created a new heatmap view <a href="#">Landing Page</a> <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user4.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jane</a> has completed all of the tasks <span class="timestamp">2 days ago</span></p>
										</li>
										<li>
											<img src="assets/img/user5.png" alt="Avatar" class="img-circle pull-left avatar">
											<p><a href="#">Jason</a> started a discussion about <a href="#">Weekly Meeting</a> <span class="timestamp">3 days ago</span></p>
										</li>
									</ul>
									<button type="button" class="btn btn-primary btn-bottom center-block">Load More</button>
								</div>
							</div>
							<!-- END TIMELINE -->
						</div>
					</div>
					<div class="row">
						<div class="col-md-4">
							<!-- TASKS -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">My Tasks</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<ul class="list-unstyled task-list">
										<li>
											<p>Updating Users Settings <span class="label-percent">23%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width:23%">
													<span class="sr-only">23% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Load &amp; Stress Test <span class="label-percent">80%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
													<span class="sr-only">80% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Data Duplication Check <span class="label-percent">100%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
													<span class="sr-only">Success</span>
												</div>
											</div>
										</li>
										<li>
											<p>Server Check <span class="label-percent">45%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
													<span class="sr-only">45% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<p>Mobile App Development <span class="label-percent">10%</span></p>
											<div class="progress progress-xs">
												<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
													<span class="sr-only">10% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- END TASKS -->
						</div>
						<div class="col-md-4">
							<!-- VISIT CHART -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Website Visits</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="visits-chart" class="ct-chart"></div>
								</div>
							</div>
							<!-- END VISIT CHART -->
						</div>
						<div class="col-md-4">
							<!-- REALTIME CHART -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">System Load</h3>
									<div class="right">
										<button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
										<button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
									</div>
								</div>
								<div class="panel-body">
									<div id="system-load" class="easy-pie-chart" data-percent="70">
										<span class="percent">70</span>
									</div>
									<h4>CPU Load</h4>
									<ul class="list-unstyled list-justify">
										<li>High: <span>95%</span></li>
										<li>Average: <span>87%</span></li>
										<li>Low: <span>20%</span></li>
										<li>Threads: <span>996</span></li>
										<li>Processes: <span>259</span></li>
									</ul>
								</div>
							</div>
							<!-- END REALTIME CHART -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
@endsection
@section('scripts')
<script type="text/javascript">
    var map = L.map('map').setView([12.978312,124.011375], 10);
    L.tileLayer( 'https://api.maptiler.com/maps/streets/{z}/{x}/{y}.png?key=CxC7aDuJcG77pDH5yjGS', {
        maxZoom: 18,
        attribution:'<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>'
    }).addTo(map);
    @foreach($location as $data)
    var marker = L.marker([{{$data->latitude}}, {{$data->longitude}}]).addTo(map);
    marker.bindPopup("<img src='/storage/location_images/{{$data->pili_image}}' width='300'>"+
        "<hr>"+
        "<table class='table table-dark'>" +
        "<div class='section-header'>"+
            "<h3>{{$data->municipality}}</h3>"+
            "<h5 class='text-center'>{{$data->brgy}}</h5>"+
       " </div"+
            "<tr>" +
                "<th>Processors</th>"+
                "<td>{{$data->processors}}"+
            "</tr>"+
            "<tr>" +
                "<th>Trees</th>"+
                "<td>{{$data->trees}}"+
            "</tr>"+
            "<tr>" +
                "<th>Retailers</th>"+
                "<td>{{$data->retailers}}"+
            "</tr>"+
            "<tr>" +
                "<th>farmers</th>"+
                "<td>{{$data->farmers}}"+

            "</tr>"+

        "</table>"
       );
    @endforeach
  </script>
@endsection
