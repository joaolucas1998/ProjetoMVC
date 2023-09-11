<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina inicial</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </head>
<body style="background-color: #3fdce3;">
  <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/' . FOLDER . '/view/navbar.php'; ?>
  <div class="container">
    <div class="row text-center">
      <h2 style="font-family:Georgia, 'Times New Roman', Times, serif">Atividade AP1 "João Lucas de Vargas"</h2>
      <div class="text-center">
        <img class="img-fluid" width="500px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAulBMVEUmKEo/3OPgWkc/3+UkED1A4uk5usQkCzskDjwlHkQmJUgvdIY7wssweYo8ytLkW0cSJUopRF8oO1g4s77oXEclIEUlGkJPMUkbJkoAI0quS0hkNkklF0A3rLglGEEkCDq7T0grU2ssX3UtZ3wzkJ9qOElWM0mpSkjYWEcyiJgnNVQubIA+1d0jAC0kADcnL1BBLkp/PkmWREgvKkp3O0nBUUebRkjLVEeNQUmXREg1nqsrVm4oQV0pSmTZuNgzAAAFOklEQVR4nO2daXOqSBSGQRYFUUwUAgY1URPjMprkZnIzWf7/3xpaZMcF71h097zPp1RTJ3Uee4eqbkEAAAAAAAAAAAAAAIA/NHm0HslW1WlcDq+prsSVOhlWncilsCaKJIqipEx4rUVvQAR9xYFXdSoXQjZ2hl256lQuRCM0VGHIKjBkHxiyDwzZB4bsA0P2gSH7wJB9YMg+MGQfGLIPDNkHhuwDQ/aRu7x/mbGnytZQmdtVp3IpLFUhGFrViVyO+tWytbyqV53GJdEtzdKrTgIAAAAAAAAAAAAAAADAhXA6BCdb6hSVMojjPr/M+v3+64OT0PH/vn31S2cvNy7bkk7n5XfP3NIz7x7dXbF70zfD4qcPh2FH9+GpV4swe3e/iIzjzHpmXGrW3tyj/4lS3FnCb2tTe+wIzvOTmS7u9RlVdPsZQSLz4D6auVLz707VyZ6D+54X9BXf84K+Iou16NwWCZKWWkTvhb3hppPtbUeoOt/SOC/FVbgP85W1ruj+LiVYqz2x1hN/latCvyc+stUTnbdyvdBvph9sGXb+KW3YZ6sjdgqnvYOGdzCkC/4NnY/Shu+MGT6Wni3e2BpLhU5JwVqv6ozL0pmVa6bmHWtrGuG5XDNlbUkjkA1+mUpksArJ9qlMHVad7Tk4z1y3UYJzc2o77d2yNRdGOAUvnbgSPLUWGRY8TZFpwVMUGRc8rsi84DFFDgQPK3IheEiRE8H9itwI7lPkSLBYkSvBIkXOBPOK3AlmFTkUTCtyKZhU5FQwVuRWMFTkWDBQ5Fpwq8i3oK8oMPlWDQAAAAAAAAAAAAAAAMD/Bctr1GMasp26Z1S35UZDzp6sq5FCWy+Op+0QV/t+YLRjjO70fhQL6da0axiDZvr8Z6/lF3bn2wNph+Ns/M+IqqOG9R9FSqMo7eYorIeGsX2spK5X9T6DwvYwuGI2G29MRhTVo/cZHNOdRFKM7+BIa/0+OOJaVJKG8i5E+bKiY77T8eqCnmqU1XyGJMegXVrN0PA6rhV9ERY2NaHeLowXx9TcqVtsSLInKWqR4VXC8DosbO0z9J+NaTnYfJ+h72T9iaEoLSjpi3sNpXb9zwxVSs42jw13Q2FciUurlGEu/p6OC7wjw1VXJRhKlLHaKGOYjx/QcYlCaCgZf8mE0aarhJWg66cbSoMgfn2thvFio0KvmNhwl4++Dmc4ZWyVMAyvvdDXRhj/Q8VYkzMU9O9IwD7DULDG4eMlFR0xbyh4YSudnmWob6T4MQWcarioyyH1DeOGcSudx4aS2k0gHTKkvpUmRppJPNKIqe2DeMCQ4pEmP1sI8WxRyLHZgq75UFyph2b8o4ZhfJvaGf/Iqu24If2rtiySMRJKGWbju9StvLPpkxkwNlSSnGIo0r57UppDIWEozVsx84LZIhc/pmIyFPa+xZCW22EinvG/h1qIvSjcPaXixa9h1WYhRYaSYlwH7yDO2wFLirqhpQYLxlLyNnG53vmcsQMmbxPHa0r6ICGeD4P3usZg+lOPhvkyO+Awfv5dp2Oa2JFY0xS8lS+1A97Gyx5tb/UL9hYJztk90QYMYQjD6vEGhy7BjffriVWmrkdfZqz4FxpQ8ykmQ3RF7GfRMiv6zLRKbhRGq8CKfJDyPsMrZulZxaTR9fZ2u7DaFE5j3jTYTTST+VvLoPBTJr/Bavt3m1ZBP8XG13w6H8t75mnvujWdNzfpT2Wa0JxPW1dyED8m8Q3K5vkUlm3b+9dZumbbWjZ93UoUWtqheAAAAAAAAAAAAAAAAAAAAAAA+G/4F4CxdxJPjvk4AAAAAElFTkSuQmCC" alt="É uma frase dizendo eu amo php, com um coração no lugar da paralavra amo.">
      </div>
</body>
</html>