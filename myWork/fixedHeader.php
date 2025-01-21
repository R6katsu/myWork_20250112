<?php
    // �w�b�_�[�̍���
    const HEADER_HEIGHT = '60px';
?>

<style>
    /* �w�b�_�[�̃X�^�C�� */
    header {
        position: fixed; /* �ʒu���Œ� */
        top: 0; /* ��ʏ㕔�ɔz�u */
        left: 0; /* left��right��0�ɐݒ肵�Đ^�񒆂ɔz�u */
        right: 0;
        width: 100%; /* ��������ʂɍ��킹�� */
        height: <?php echo HEADER_HEIGHT; ?>; /* ������ݒ� */
        background-color: black; /* �w�i�F */
        color: white; /* �����F */
        display: flex; /* �q�v�f�������тɔz�u */
        align-items: center; /* ���������i���j */
        justify-content: left; /* �q�v�f�����ɔz�u�i�����珇�ɔz�u���Ă����j */
        padding: 0 5%; /* ���E�̗]���i�q�v�f��z�u����ׂ͈̔́j */
        z-index: 1000; /* �D�悵�ĕ\�� */
    }

    /* �{�^���̃R���e�i */
    .header-nav {
        display: flex;
        gap: 20px; /* �{�^�����m�̊Ԋu��ݒ� */
        align-items: center;/* ���������i���j */
        height: 100%; /* �w�b�_�[�̍������p�� */
    }
</style>

    <?php
        // �Œ�w�b�_�[���쐬
        function createFixedHeader($contents) 
        {
            echo 
            '<header>
                <nav class="header-nav">'
                    .$contents.     // �R���e���c���w�b�_�[�̎q�v�f�Ƃ��ĕ\��
                '</nav>
            </header>';

            // �w�b�_�[�p�̗]��
            echo '<br><br>';
        }
    ?>