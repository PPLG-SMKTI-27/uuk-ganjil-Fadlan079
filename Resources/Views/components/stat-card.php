<div class="relative bg-slate-800 border border-slate-700 p-6 rounded-xl shadow-lg overflow-hidden
            transition-all duration-300 hover:-translate-y-2 <?= $color['shadow'] ?>">

    <i class="fa-solid <?= $icon ?> <?= $color['text'] ?> text-4xl"></i>

    <div>
        <p class="text-slate-400 text-sm"><?= $label ?></p>
        <h3 class="text-2xl font-bold"><?= $value ?></h3>
    </div>

    <i class="fa-solid <?= $icon ?> absolute right-4 top-2 text-7xl <?= $color['muted'] ?>"></i>

</div>