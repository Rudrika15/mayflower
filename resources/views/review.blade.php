
<?php

$accountId = 'madhavipalte202203@gmail.com';
$locationsId = 'ChIJtcj6Gr2EXjkRPZGcSjfd_aI';
?>

<a href="
https://mybusiness.googleapis.com/v4/accounts/{{$accountId}}/locations/{{$locationsId}}/reviews">Google Review</a>

<script>
  /**
 * Returns a list of reviews.
 * @param locationName Name of the location to retrieve reviews for.
 * @return List<Reviews> A list of reviews.
 * @throws Exception
 */
public static List < Review > listReviews(String locationName) throws Exception {
    Mybusiness.Accounts.Locations.Reviews.List reviewsList =
      mybusiness.accounts().locations().reviews().list(locationName);
  ListReviewsResponse response = accountsList.execute();
    List < Reviews > reviews = response.getReviews();

    for (Reviews review : reviews) {
      System.out.println(review.toPrettyString());
    }
    return reviews;
  }

</script>

</html>