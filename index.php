<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/style.css" />
    <title>Word scramble</title>
  </head>
  <body>
    <!-- instructions + difficulty + start btn -->

    <section class="section-a">
      <h1>WORD SCRAMBLE</h1>
      <div class="instructions">
        <h2><span class="highlight">Instructions:</span></h2>
        <ol>
          <li>
            Choose difficulty.
          </li>
          <li>
            Unscramble the letters using your keyboard in order to spell out the
            correct word.
          </li>
        </ol>
      </div>
      <div class="difficulty">
        <label for="select-difficulty">Choose difficulty:</label>
        <select name="difficulty" id="select-difficulty">
          <option value="easy">Easy</option>
          <option value="medium">Medium</option>
          <option value="hard">Hard</option>
        </select>
        <a href="#" class="btn" id="start-btn">Start</a>
      </div>
    </section>

    <!-- timer + word + input + score + reset -->

    <section class="section-b">
      <div class="timer">
        <h2 id="timer">30</h2>
      </div>
      <p>Find the hidden word:</p>
      <h1 id="word">WORD</h1>
      <input type="text" placeholder="Enter the correct word" id="user-input" />
      <h4 id="score">Score: 0</h4>
      <p class="reset">RESET GAME</p>
    </section>

    <!-- game over -->
    <section class="section-c">
      <div>
        <h2>You lost.</h2>
        <p id="message">The word was:</p>
        <a href="#" class="btn" id="play-again">Play again</a>
      </div>
    </section>

    <script src="js/main.js"></script>
  </body>
</html>
