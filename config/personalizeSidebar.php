<?php
        if (Yii::app()->user->name == "admin" || sUser::model()->rightCountM > 2 || !Yii::app()->user->checkAccess('HR ESS Staff'))
            $this->renderPartial("_notificationSystem");

        if (Yii::app()->user->name == "admin" || sUser::model()->rightCountM > 2 || !Yii::app()->user->checkAccess('HR ESS Staff'))
            $this->renderPartial("_reminderSystem");

        $this->renderPartial("_photoNews");

        $this->renderPartial("_feedback");

        $this->renderPartial("_corporateCalendar");

        $this->renderPartial("/site/_category", array('category_id' => 3));

        $this->renderPartial("/site/_quote");

?>