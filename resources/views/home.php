<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Color of the Day API</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col">
                <h1 class="display-4">Color of the Day</h1>
                <p>Get a new color everyday.</p>

                <h2>HTTP Request</h2>
                <p><code>GET http://coloroftheday-api.herokuapp.com/api</code></p>

                <h2>Attributes</h2>
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Parameter</th>
                          <th scope="col">Type</th>
                          <th scope="col">Default</th>
                          <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                          <td>date</td>
                          <td>YYYY-MM-DD</td>
                          <td><em>today</em></td>
                          <td>The date of the color to retrieve</td>
                        </tr>
                    </tbody>
                </table>

                <h2>Example query</h2>
                <a href="http://coloroftheday-api.herokuapp.com/api?date=2021-04-01">http://coloroftheday-api.herokuapp.com/api?date=2021-04-01</a>
            </div>
        </div>
    </main>
</body>
</html>
