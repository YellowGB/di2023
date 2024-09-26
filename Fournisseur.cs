using di2023.Entite;

namespace di2023.Fournisseur;

class Fournisseur : Entite {
    private string _siret;

        public void Fournisseur(
        string nom,
        string desc,
        DateTime dateCreation,
        DateTime dateModification,
        string siret)
    {
        base(nom, desc, dateCreation, dateModification);
        this._siret = siret;
    }

    public Entite Creer() {
        Console.Writeline("c'est comme ça qu'on écrit vite, Tanguy.");
    }
}