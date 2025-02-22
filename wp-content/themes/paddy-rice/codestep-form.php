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
							<!-- Step 0: Personal Information -->
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
									<button type="button" class="calculte btn btn-secondary">Read</button>
									<button type="button" class="next btn btn-primary">Next</button>
								</div>
							</div>

							<!-- Step 0: Personal Information -->
							<div class="form-step active">
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
							<!-- Step 1: Personal Information -->
							<div class="form-step">
								<div class="form-header">
									<h1>Personal Information</h1>
									<p>Please provide your contact details for event communications.</p>
								</div>
								<div class="form-group">
									<label for="fullName">Full Name</label>
									<input type="text" id="fullName" name="fullName" placeholder="Enter your full name" required>
									<div class="error-message">Please enter your full name</div>
								</div>
								<div class="form-group">
									<label for="email">Email Address</label>
									<input type="email" id="email" name="email" placeholder="your.email@example.com" required>
									<div class="error-message">Please enter a valid email address</div>
								</div>
								<div class="form-group">
									<label for="phone">Phone Number</label>
									<input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
									<div class="error-message">Please enter your phone number</div>
								</div>
								<div class="buttons">
									<button type="button" class="prev">Back</button>
									<button type="button" class="next">Continue</button>
								</div>
							</div>
							<!-- Step 2: Event Details -->
							<div class="form-step">
								<div class="form-header">
									<h1>Event Details</h1>
									<p>Select your preferred event type and schedule.</p>
								</div>
								<div class="form-group">
									<label for="eventType">Event Type</label>
									<select id="eventType" name="eventType" required>
										<option value="">Choose an event type</option>
										<option value="conference">Conference</option>
										<option value="workshop">Workshop</option>
										<option value="seminar">Seminar</option>
									</select>
									<div class="error-message">Please select an event type</div>
								</div>
								<div class="form-group">
									<label for="date">Preferred Date</label>
									<input type="date" id="date" name="date" required>
									<div class="error-message">Please select a date</div>
								</div>
								<div class="form-group">
									<label for="participants">Number of Participants</label>
									<input type="number" id="participants" name="participants" min="1" placeholder="Enter number of participants" required>
									<div class="error-message">Please enter number of participants</div>
								</div>
								<div class="buttons">
									<button type="button" class="prev">Back</button>
									<button type="button" class="next">Continue</button>
								</div>
							</div>
							<!-- Step 3: Additional Information -->
							<div class="form-step">
								<div class="form-header">
									<h1>Additional Preferences</h1>
									<p>Help us prepare for your needs.</p>
								</div>
								<div class="form-group">
									<label for="dietary">Dietary Requirements</label>
									<select id="dietary" name="dietary">
										<option value="none">No specific requirements</option>
										<option value="vegetarian">Vegetarian</option>
										<option value="vegan">Vegan</option>
										<option value="glutenFree">Gluten Free</option>
									</select>
								</div>
								<div class="form-group">
									<label for="accommodation">Accommodation Needed</label>
									<select id="accommodation" name="accommodation" required>
										<option value="no">No</option>
										<option value="yes">Yes</option>
									</select>
								</div>
								<div class="form-group">
									<label for="specialRequests">Special Requests</label>
									<input type="text" id="specialRequests" name="specialRequests" placeholder="Any special requirements or requests"> </div>
								<div class="buttons">
									<button type="button" class="prev">Back</button>
									<button type="submit" class="submit">Complete Registration</button>
								</div>
							</div>
						</form>
						<!-- Success Message -->
						<div class="success-message">
							<h2>Registration Complete!</h2>
							<p>Thank you for registering for the event. We've sent a confirmation email with all the details to your inbox.</p>
						</div>
					</div> 
				</div>
	        </div>
	    </section>
	    <!-- // end contact -->

	</main><!-- #main -->

<?php
get_footer();
