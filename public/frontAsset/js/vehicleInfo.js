class VehicleInfoUI{



   constructor(formObject)
   {

      this.formObject = formObject;

      this.currentPage = formObject.currentPage;
      this.globalFormElement =  document.querySelector(`#${formObject.globalFormElement}`);
      this.formGroups = this.globalFormElement.querySelectorAll(`.${formObject.formGroupClassName}`)
      this.vehcicleComponents = this.globalFormElement.querySelectorAll(`.${formObject.infoComponentClassName}`)
      this.formHeading =  this.globalFormElement.querySelector(`#${formObject.mainHeading}`)
      this.formNextButton = this.globalFormElement.querySelector(`#${formObject.formNextButton}`)
      this.progressBar =  document.querySelector(`#${formObject.progressBar}`);


   }

    setIdOfFormGroups()
    {

        // setting ids of vehicle compennts

        this.vehcicleComponents.forEach((infoComponent ,index ) => {
            infoComponent.id = `${this.formObject.infoComponentClassName}-${index}`;

        })
    }

   updateNextInfoComponentUI(id)
   {

        this.vehcicleComponents.forEach((infoComponent ,index ) => {
            infoComponent.style.display = 'none';

        })

        // console.log(id);

        if (id > this.vehcicleComponents.length) {
            return;
        }
        else{
            const TobeActiveEle = this.vehcicleComponents[id];

            TobeActiveEle.style.display = 'block';
        }



   }
   updatePrevInfoComponentUI(id)
   {

        this.vehcicleComponents.forEach((infoComponent ,index ) => {
            infoComponent.style.display = 'none';

        })

        if ( id < 0 ) {
            return;
        }

        console.log(this.vehcicleComponents);

        const TobeActiveEle = this.vehcicleComponents[id];

        TobeActiveEle.style.display = 'block';

   }


   setFormMainHeading(heading)
   {

      this.formHeading.innerText = heading;

   }

   init(initObject)
   {
       this.setIdOfFormGroups();
       this.setFormMainHeading(initObject.heading);
    //    this.updateFormGroupUI(initObject.showFormEleIndex);
       this.updateNextInfoComponentUI( this.currentPage );
       this.formNextButton.style.display = 'block';
       this.updateProgressBar(0);



   }


   updateProgressBar(progressIndex){

       const onePrecentWidth = (progressIndex / this.vehcicleComponents.length) * 100;

       this.progressBar.style.width = `${onePrecentWidth}%`


   }

}


const vehicleInitObject = {

    currentPage : 0,
    globalFormElement : 'vehicle-info-global-form',
    formGroupClassName : 'vehicle-form-group',
    infoComponentClassName : 'info-component',
    mainHeading : 'form-main-heading',
    formNextButton : 'form-next-button',
    formPrevButton : 'form-prev-button',
    progressBar : 'vehicle-progress-bar',
}

const vehiclePage = new VehicleInfoUI(vehicleInitObject);


const formNextButton = document.querySelector(`#${vehicleInitObject.formNextButton}`)
const formPrevButton = document.querySelector(`#${vehicleInitObject.formPrevButton}`)

vehiclePage.init({
    heading : `Let's get started with your car information`,
});


formNextButton.addEventListener('click' , () => {

    const nextPage =  ++vehicleInitObject.currentPage;

    // console.log(nextPage);

    vehiclePage.updateProgressBar(nextPage);

    vehiclePage.updateNextInfoComponentUI(nextPage);



})

formPrevButton.addEventListener('click' , () => {

    const prevPage =  vehicleInitObject.currentPage--

     vehiclePage.updateProgressBar(prevPage);

    vehiclePage.updatePrevInfoComponentUI(prevPage);


})






