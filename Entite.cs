using System.Collections.Generic;
using System;

namespace di2023.Entite;

abstract class Entite
{
    protected string nom;
    protected string desc;
    protected DateTime dateCreation;
    protected DateTime dateModification;

    public void Entite(
        string nom,
        string desc,
        DateTime dateCreation,
        DateTime dateModification)
    {
        this.nom = nom;
        this.desc = desc;
        this.dateCreation = dateCreation;
        this.dateModification = dateModification;
    }

    public abstract self Creer();
}
