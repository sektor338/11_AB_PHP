<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Véradás | MV</title>
  <link rel="shortcut icon" href="mv.png" type="image/x-icon">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            mv: 'rgb(227,7,19)',
          }
        }
      }
    }
  </script>
  <style type="text/tailwindcss">
    input[type=text], input[type=email], input[type=tel] {
      @apply w-1/4 border-slate-500/80 border-2 rounded-md pl-4 placeholder:text-slate-500/60 min-w-[200px] px-1 py-2 placeholder:font-serif
    }
    .title{
      @apply text-3xl after:w-full after:h-0.5 after:bg-mv after:block text-mv mb-5
    }
  </style>
</head>
<body class=" bg-slate-100">
  <form action="sent.php" method="post" class="w-5/6 max-w-[800px] m-auto bg-white mt-5 mb-5 px-10 pb-7 select-none border-mv border-2 rounded-xl">
    <div class="flex w-full py-6 max-md:flex-col">
      <img src="mv.png" alt="" class="max-md:m-auto pointer-events-none">
      <div class="flex flex-col gap-3 w-full justify-center items-center">   
        <div class="text-6xl text-mv font-bold">Véradás</div>
        <div class="text-xl font-serif">Jelentkezés</div>
      </div>
    </div>
    <div class="">
      <div class="mb-6">

        <div class="title">Személyes adatok</div>
        <div class="ml-6">

          <div class="mb-6 flex gap-2 flex-wrap">
            <input type="text" name="vnev" placeholder="Vezetéknév" required>
            <input type="text" name="knev" placeholder="Keresznév" required>
          </div>
          <div class="mb-6">
            <input type="email" name="email" placeholder="Email" required>
          </div>
          <div class="mb-6">
            <input type="tel" name="telefon" placeholder="Telefonszám" required>
          </div>
          <div class="mb-6 flex gap-2 flex-wrap">
            <input type="text" name="varos" placeholder="Város" required>
            <input type="text" name="cim" placeholder="Cím" required>
            <input type="text" name="areacode" placeholder="Irányítószám" required>
          </div>
          <div class=" mb-3">
            <label for="szul" class="text-xl">Születési dátum:</label>
            <input type="date" name="szul" id="szul" required class="border-slate-500/80 border-2 rounded-lg  px-3 py-2 placeholder:text-slate-500/60">
          </div>
          <div class="">
            <label for="blood" class="text-xl">Vércsoport:</label>
            <select name="blood" id="blood" require class="border-slate-500/80 border-2 rounded-lg px-3 py-2 placeholder:text-slate-500/60">
              <option value="" selected disabled>
                Válasszon egy vércsoportot!
              </option>
              <option value="+A">
                +A csoport
              </option>
              <option value="+B">
                +B csoport
              </option>
              <option value="+AB">
                +AB csoport
              </option>
              <option value="+0">
                +0 csoport
              </option>
              <option value="-A">
                -A csoport
              </option>
              <option value="-B">
                -B csoport
              </option>
              <option value="-AB">
                -AB csoport
              </option>
              <option value="-0">
                -0 csoport
              </option>
              <option value="Nem tudom">
                Nem tudom
              </option>
            </select>
        </div>
        </div>
      </div>

      <div class="mb-6">
        <div class="title">Fogyaszt alkoholt?</div>
        <div class="ml-6">
          <div class="">
            <input type="radio" name="alc" value="igen" required>
            <label for="igen">Igen</label>
          </div>
          <div class="">
            <input type="radio" name="alc" value="nem" required>
            <label for="nem">Nem</label>
          </div>
        </div>
      </div>

      <div class="mb-6">
        <div class="title">Fogyaszt dohány terméket?</div>
        <div class="ml-6">
          <div class="">
            <input type="radio" name="cig" value="cigen" required>
            <label for="cigen">Igen</label>
          </div>
          <div class="">
            <input type="radio" name="cig" value="cnem" required>
            <label for="cnem">Nem</label>
          </div>
        </div>
      </div>
      <div class="mt-7 mb-4">
        <input type="submit" value="Beküldés" class="bg-mv w-36 h-11 text-white rounded-lg">
      </div>
      <div class="">
        <input type="checkbox" name="hirlevel" id="">
        <span class="">feliratkozik-e a Magyar Vöröskereszt hírlevelére?</span>
      </div>
    </div>
  </form>
</body>
</html>