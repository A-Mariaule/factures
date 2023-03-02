@include('includes.header')

<main class="flex items-center justify-around flex-wrap pt-12">
    <div id="clients" class="flex-col text-center pb-2">
        <h2 class="font-medium text-3xl pb-4">Clients</h2>
        <img src="../assets/clients.jpg" alt="clients" class='w-80 mb-5' >
        <a  href = "../clients" class="block text-red-800 font-medium pb-2">Afficher tous les clients</a>
        <a href = "../client/create" class="block text-red-800 font-medium">Créer un client</a>
    </div>
    <div id="factures" class="flex-col text-center pb-2">
        <h2 class="font-medium text-3xl pb-4">Factures</h2>
        <img src="../assets/factures.jpg" alt="factures" class='w-80 mb-5'>
        <a href = "../factures" class="block text-red-800 font-medium pb-2">Afficher toutes  les factures</a>
        <a href = "../facture/create" class="block text-red-800 font-medium">Créer une facture</a>

    </div>
</main>

@include('includes.footer')
