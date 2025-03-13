<?php
class Animal {
    public $animals;

    public function __construct($ar_animal)
    {
        $this->animals = $ar_animal;
    }

    public function Index()
    {
        foreach ($this->animals as $animal) {
            echo "- $animal <br/>";
        }
    }

    public function Store($animal) {
        $this->animals[] = $animal;
    }

    public function update($index, $animal){
        $this->animals[$index] = $animal;
    }

    public function destroy($index){
        unset($this->animals[$index]);
    }



}
 # membuat object
 #kirimkan data array ke dalam constructor
$animal = new Animal(["Ayam", "Ikan"]);

#method Index
echo "Index - Menampilkan seluruh hewan <br/>";
$animal->index();
echo "<br/>";

#method Store
echo "Store - Menampilkan seluruh baru (burung) <br/>";
$animal->Store("Burung");
$animal->Index();
echo "<br/>";

#menthod Update
echo "Update - Mengupdate hewan <br/>";
$animal->Update(0, 'kucing Anggora');
$animal->Index();
echo "<br/>";

#method Destroy
echo "Destroy - Menghapus hewan <br/>";
$animal->Destroy (1);
$animal->Index();
echo "<br/>";