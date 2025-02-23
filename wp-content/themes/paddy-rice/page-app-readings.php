<?php
/**
 * Template Name: App Readings Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Paddy_Rice
 */

get_header();
?>

	<main id="primary" class="site-main">

	    <!-- contact section -->
	    <section class="">
	        <div class="container">
	            <div class="readings-panel-content">
					<div class="main-content py-5">
						<form id="registrationForm">

							<div class="form-step active">
								<div class="form-header">
									<h1>Readings</h1>
									<p>Put the sensor on the paddy rice then tap 'Read'</p>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputMoistureContent" class="form-label">Moisture Content</label>
											<div class="widget-box reading-box">
												<div class="widget-wrap">
													<div class="widget-content">
														<input type="text" id="inputMoistureContent" class="form-control" required>
														<label class="sign-label" for="inputMoistureContent">%</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputTemperature" class="form-label">Temperature</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputTemperature"class="form-control" required>
															<label class="sign-label" for="inputTemperature">°C</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputHumidity" class="form-label">Humidity</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputHumidity" class="form-control" required>
															<label class="sign-label" for="inputHumidity">%</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="buttons">
									<button type="button" class="startreading btn btn-secondary">Read</button>
									<button type="button" class="next btn btn-primary">Next</button>
								</div>
							</div>

							<div class="form-step">
								<div class="form-header">
									<h1>Prediction</h1>
									<p>Tap 'Predict' to see the estimated predictions</p>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputDryingtime" class="form-label">Drying time (hours : mins)</label>
											<div class="widget-box reading-box">
												<div class="widget-wrap">
													<div class="widget-content">
														<input type="text" id="inputDryingtime" class="form-control" required>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputYield" class="form-label">Yield</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputYield"class="form-control" required>
															<label class="sign-label" for="inputYield">kg</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputShelflife" class="form-label">Shelf life (months)</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputShelflife" class="form-control" required>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="buttons">
									<button type="button" class="calculte btn btn-secondary">Read</button>
									<button type="button" class="next btn btn-primary">Next</button>
								</div>
							</div>

							<div class="form-step">
								<div class="form-header">
									<h1>Data Overview</h1>
									<p>This is the collected sensor readings and their corresponding predictions.</p>
								</div>
								<div class="row">
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputMoistureContent" class="form-label">Moisture Content</label>
											<div class="widget-box reading-box">
												<div class="widget-wrap">
													<div class="widget-content">
														<input type="text" id="inputMoistureContent" class="form-control" value="28" required readonly>
														<label class="sign-label" for="inputMoistureContent">%</label>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputTemperature" class="form-label">Temperature</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputTemperature"class="form-control" value="25" required readonly>
															<label class="sign-label" for="inputTemperature">°C</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputHumidity" class="form-label">Humidity</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputHumidity" class="form-control" value="70" required readonly>
															<label class="sign-label" for="inputHumidity">%</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="row mt-4">
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputDryingtime" class="form-label">Drying time (hours : mins)</label>
											<div class="widget-box reading-box">
												<div class="widget-wrap">
													<div class="widget-content">
														<input type="text" id="inputDryingtime" class="form-control" value="07:30" required readonly>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputYield" class="form-label">Yield</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputYield"class="form-control" value="30" required readonly>
															<label class="sign-label" for="inputYield">kg</label>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-4">
										<div class="reading-widget">
											<label for="inputShelflife" class="form-label">Shelf life (months)</label>
											<div class="reading-box">
												<div class="widget-box reading-box">
													<div class="widget-wrap">
														<div class="widget-content">
															<input type="text" id="inputShelflife" class="form-control" value="6" required readonly>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="buttons">
									<button type="button" class="prev btn btn-secondary">Back</button>
									<button type="submit" class="submit btn btn-primary">Save data</button>
								</div>
							</div>
						</form>
						<!-- Success Message -->
						<div class="success-message">
							<h2>Confirmation</h2>
							<p>Please confirm you want to save this data. This action cannot be undone.</p>

							<div class="buttons">
								<button type="button" class="prev btn btn-primary">Save now</button>
								<button type="submit" class="submit btn btn-secondary">Review data</button>
							</div>
						</div>
					</div> 
				</div>
	        </div>
	    </section>
	    <!-- // end contact -->

	</main><!-- #main -->

<?php
get_footer();
