import { BrowserModule } from '@angular/platform-browser';
import { NgModule } from '@angular/core';
import { FormsModule } from '@angular/forms'; // <-- NgModel lives here
import { Routes, RouterModule } from '@angular/router'; //patciam irasyt

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { PrekesComponent } from './prekes/prekes.component';

const routes: Routes = [                              //
  { path: ':status', component: PrekesComponent },    //paciam
  { path: '**', redirectTo: '/all' }                  //
];

@NgModule({
  declarations: [
    AppComponent,
    PrekesComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule, //ngModel ir cia irasyt
    RouterModule.forRoot(routes)// paciam
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
